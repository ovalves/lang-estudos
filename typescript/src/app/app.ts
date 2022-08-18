import { NegociacaoController } from './controllers/negociacao-controller.js';

const controller = new NegociacaoController();
const form = document.querySelector('.form');

try {
    if (!form) {
        throw new Error("Erro ao criar o formulário.");
    }

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        controller.adiciona();
    });
} catch (error) {
    console.log(error);
}
