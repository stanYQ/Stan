var http = require('http');
var fs = require('fs');
var path = require('path');
var URL = require('url');
var _ = require('underscore');
//mime.getType 可以根据url路径判断文件类型
var mime = require('mime');
var querystring = require('querystring');


//封装render
function render(fileName, res) {
    fs.readFile(fileName, (err, data) => {
        if (err) {
            res.writeHead(404, 'Not Found', {
                'Content-Type': 'text/html;charset=utf-8'
            })
            res.end('404 Not Found');
        }
        //mime.getType 可以根据url路径判断文件类型
        res.setHeader('Content-Type', mime.getType(fileName));
        res.end(data);
    })
}



var app = http.createServer((req, res) => {
    //将请求路径转换成小写
    var url = req.url.toLocaleLowerCase();
    var method = req.method.toLocaleLowerCase();
    //res 是一个对象
    //在将render挂载到res 后期使用 只需要通过 res.render() 进行文件以及页面的调用
    //第二个参数用来传递模板数据
    res.render = (fileName, tplData) => {
        fs.readFile(fileName, (err, data) => {
            if (err) {
                res.writeHead(404, 'Not Found', {
                    'Content-Type': 'text/html;charset=utf-8'
                })
                res.end('404 Not Found');
            }
            //如果存在模板数据 进行模板替换
            if (tplData) {
                var fn = _.template(data.toString('utf-8'));
                data = fn(tplData);
            }
            //mime.getType 可以根据url路径判断文件类型
            res.setHeader('Content-Type', mime.getType(fileName));
            res.end(data);
        })
    }
    //将query挂载到req
    req.query = () => {
        return URL.parse(req.url, true).query;
    }
    //进行设计路由f
    if (url === '/' || url === '/index' && method === 'get') {
        //读取index.html 并返回
        fs.readFile(path.join(__dirname, 'data', 'data.json'), 'utf-8', (err, data) => {
            //如果第一次访问网站 data.json 文件不存在
            if (err && err.code != 'ENOENT') {
                throw err;
            }
            //将Json字符串格式的 data 转成对象  如果data不存在 转成空对象
            var list_news = JSON.parse(data || '[]');
            res.render(path.join(__dirname, 'views', 'index.html'), { list: list_news });

        })
    } else if (url === '/submit' && method === 'get') {
        //读取submit.html
        res.render(path.join(__dirname, 'views', 'submit.html'), res);
    } else if (url.startsWith('/item') && method === 'get') {

        //1、获取当前的用户请求的id
        var id = req.query().id;
        //2、读取data.json 文件中的数据，根据id进行查找
        fs.readFile(path.join(__dirname, 'data', 'data.json'), 'utf-8', (err, data) => {
            //如果第一次访问网站 data.json 文件不存在
            if (err && err.code != 'ENOENT') {
                throw err;
            }
            //将Json字符串格式的 data 转成对象  如果data不存在 转成空对象
            var list_news = JSON.parse(data || '[]');
            var seach_new = null;
            list_news.forEach(element => {
                if (element.id.toString() === id) {
                    seach_new = element;
                }
            });
            res.render(path.join(__dirname, 'views', 'details.html'), { newInfo: seach_new });

        })

    } else if (url.startsWith('/add') && method === 'get') {
        //get 方法提交一条新闻
        //要获取到用户 get 提交的数据，需要用到 url 模块
        //通过get提交的数据，可以通过req.url 就可以获取（但是需要自己去截取字符串，然后获取想要的数据）
        //1、获取用户get提交过来的数据 
        //2、把用户提交的数据保存到data.json 

        // 避免数据将data.json 中原有的数据覆盖
        fs.readFile(path.join(__dirname, 'data', 'data.json'), 'utf-8', (err, data) => {
            //如果第一次访问网站 data.json 文件不存在
            if (err && err.code != 'ENOENT') {
                throw err;
            }
            //将Json字符串格式的 data 转成对象  如果data不存在 转成空对象
            var list = JSON.parse(data || '[]');
            req.query().id = list.length;

            list.push(req.query());
            //将list 数组 转成json格式的字符串 写入文件
            fs.writeFile(path.join(__dirname, 'data', 'data.json'), JSON.stringify(list), (err) => {
                if (err) throw err;
                //3、跳转到主页
                //重定向通过重置响应头实现
                res.statusCode = 302;
                res.statusMessage = 'success';
                res.setHeader('Location', '/');
                res.end();
            })
        })

    } else if (url.startsWith('/add') && method == 'post') {
        //post 提交一条新闻
        fs.readFile(path.join(__dirname, 'data', 'data.json'), 'utf-8', (err, data) => {
            //如果第一次访问网站 data.json 文件不存在
            if (err && err.code != 'ENOENT') {
                throw err;
            }
            //将字符串格式的 data 转成数组  如果data不存在 转成空数组
            var list = JSON.parse(data || '[]');

            //声明一个空数组用来接收一个个小Buffer 对象
            var array = [];
            //chunk 是post过来的一小部分数据 数据类型是Buffer
            req.on('data', (chunk) => {
                array.push(chunk);
            })
            //end事件触发表示数据提交结束
            req.on('end', () => {
                //将array中的buffer进行整合汇总
                var postBody = Buffer.concat(array);
                postBody = postBody.toString();
                //当前的postBody是查询字符串 需要转成json对象
                postBody = querystring.parse(postBody);
                //将数据写入json文件并重定向
                postBody.id = list.length;
                list.push(postBody);
                fs.writeFile(path.join(__dirname, 'data', 'data.json'), JSON.stringify(list), (err) => {
                    if (err) throw err;
                    //跳转到主页
                    //重定向通过重置响应头实现
                    res.statusCode = 302;
                    res.statusMessage = 'success';
                    res.setHeader('Location', '/');
                    res.end();
                })
            })

        })
    } else if (url == '/login' && method == 'get') {
        res.render(path.join(__dirname, 'views', 'login.html'));
    }
    else if (url.indexOf('/public/') === 0) {
        //静态资源配置
        res.render('.' + url);
    } else {
        res.writeHead(404, 'Not Found', {
            'Content-Type': 'text/html;charset=utf-8'
        })
        res.end('404 Not Found');
    }
}).listen(3000, () => {
    console.log('server is running');
})

