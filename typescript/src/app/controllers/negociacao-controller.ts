import { Negociacao } from '../models/negociacao.js';
import { Negociacoes } from '../models/negociacoes.js';

export class NegociacaoController {
    private inputData: HTMLInputElement | null;
    private inputQuantidade: HTMLInputElement | null;
    private inputValor: HTMLInputElement | null;
    private negociacoes = new Negociacoes();

    private date: Date = new Date();
    private quantidade: number = 0;
    private valor : number = 0;

    constructor() {
        this.inputData = document.querySelector('#data');
        this.inputQuantidade = document.querySelector('#quantidade');
        this.inputValor = document.querySelector('#valor');
    }

    adiciona(): void {
        const negociacao = this.criaNegociacao();
        negociacao.data.setDate(12);
        this.negociacoes.adiciona(negociacao);
        console.log(this.negociacoes.lista());
        this.limparFormulario();
    }

    criaNegociacao(): Negociacao {
        const exp = /-/g;
        if (this.inputData) {
            this.date = new Date(this.inputData.value.replace(exp, ','));
        }

        if (this.inputQuantidade) {
            this.quantidade = parseInt(this.inputQuantidade.value);
        }

        if (this.inputValor) {
            this.valor = parseFloat(this.inputValor.value);
        }

        return new Negociacao(this.date, this.quantidade, this.valor);
    }

    limparFormulario(): void {
        if (this.inputData) {
            this.inputData.value = '';
        }

        if (this.inputQuantidade) {
            this.inputQuantidade.value = '';
        }

        if (this.inputValor) {
            this.inputValor.value = '';
        }

        if (this.inputData) {
            this.inputData.focus();
        }
    }
}