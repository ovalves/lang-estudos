var app = require('./config/custom-express')();

let port = process.env.PORT || 3000
app.listen(port, () => {
    console.log('Servidor rodando na porta %d.', port);
});