const express = require('express');
const consign = require('consign');
const bodyParser = require('body-parser');
const morgan = require('morgan');
const logger = require('../servicos/logger.js');

module.exports = function() {
    const app = express();

    app.use(
        morgan('common', {
            stream: {
                write: function(mensagem) {
                    logger.info(mensagem);
                }
            }
        })
    );

    app.use(bodyParser.urlencoded({ extended: true }));
    app.use(bodyParser.json());

    consign()
        .include('./src/controllers')
        .then('./src/persistencia')
        .then('./src/servicos')
        .into(app);

    return app;
};
