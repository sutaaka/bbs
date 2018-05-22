const Koa = require('koa')
const mysql = require('mysql')
const Router = require('koa-router')

const app = new Koa()
const router = new Router()

router.get('/',(ctx,next) =>{
  ctx.body = '/だよ'
})

router.get('/foo',(ctx,next) =>{
  ctx.body = '/fooだよ'
})

const middleware1 = async (ctx,next) => {
  console.log(1)
  await next()
  console.log(3)
}

const middleware2 = async (ctx,next) => {
  console.log(2)
  await next()
}

app.use(middleware1)
app.use(middleware2)
app.use(router.routes())

app.listen(3000)

// const dbconfig = {
//   host: 'localhost',
//   user: 'root',
//   password: '',
//   database: 'bbs',
// }
//
// const connection = mysql.createConnection(dbconfig)
//
// const queryPromise = new Promise(
//   (resolve,reject) => {
//   connection.query('SELECT comment,pass FROM bbs WHERE id=1 LIMIT 1',(err,results,fields) => {
//   if (err){
//     reject(err);
//   }
//   resolve(results)
//   })
// })
// connection.end()
