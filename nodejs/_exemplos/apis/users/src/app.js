import 'dotenv/config';
import express from 'express';
import 'express-async-errors';
import Router from './Router';
import Database from './Database';
import Auth from './Auth';
import TokenBucket from '../../../../rate-limiter/dist/middleware/token-bucket';

class App {
    constructor() {
        this.server   = express();
        this.database = new Database();
        this.auth     = new Auth(this.database);
        this.router   = new Router(this.database, this.auth)

        this.middlewares();
        this.routes();
        this.exceptionHandler();
    }

    middlewares() {
        this.server.use(express.json());
        this.server.use(TokenBucket.throttle.bind(TokenBucket));
    }

    routes() {
        this.server.use(this.router.routes);
        this.server.use(this.database.getMappedRoutes());
    }

    exceptionHandler() {
        this.server.use(async (err, req, res, next) => {
            console.log(err);
            return res.status(500).json({ error: 'Internal server error' });
        });
    }
}

export default new App().server;
