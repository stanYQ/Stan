const users = require('./data/users.json');

module.exports = {
    // outputDir: 'dist',//构建输出目录  打包 npm run build  
    // assetsDir: 'assets',// 静态资源目录（js css img fonts）
    // lintOnSave: false,//是否开启eslint保存检测 true ||false||'error'
    devServer: {
        open:true,
        before(app) {
            //http://localhost:8080/api/users
            app.get('/api/users', (req, res) => {
                res.json(users);
            });
            app.post('/api/users',(req,res) =>{
                res.json({ custom: 'response' });
            });
        }
    }
}