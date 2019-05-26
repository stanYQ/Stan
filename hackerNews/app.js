var http = require('http');
var fs = require('fs');
var path = require('path');
var URL = require('url');
var mime = require('mime')


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
    res.render = (fileName) => {
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
    //将query挂载到req
    req.query = ()=>{
        return URL.parse(req.url,true).query;
    }
    //进行设计路由f
    if (url == '/' || url == '/index' && method == 'get') {
        //读取index.html 并返回
        res.render(path.join(__dirname, 'views', 'index.html'));
    } else if (url == '/submit' && method === 'get') {
        //读取submit.html
        res.render(path.join(__dirname, 'views', 'submit.html'), res);
    } else if (url == '/item' && method === 'get') {
        //读取details
    } else if (url.startsWith('/add') && method === 'get') {
        //get 方法提交一条新闻
        //要获取到用户 get 提交的数据，需要用到 url 模块
        //通过get提交的数据，可以通过req.url 就可以获取（但是需要自己去截取字符串，然后获取想要的数据）
        //1、获取用户get提交过来的数据
        //2、把用户提交的数据保存到data.json
        //3、跳转到主页
        console.log(req.query());
        res.end('success');
    } else if (url.startsWith('/add') && method == 'post') {
        //post 提交一条新闻
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

