const express = require('express')
const port = 3000;
const app = express()

app.use(express.static(__dirname + '/public'));

app.set('view engine', 'ejs')

app.get('/', (req, res) => {
    res.render('pages/index')
})

app.get('/assignment', (req, res) => {
  res.render('pages/assignment')
})

app.listen(port)