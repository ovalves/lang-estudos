# Logs
Um dos pontos mais críticos de uma aplicação é quando se precisa identificar aquele famoso "erro que só acontece em produção". Nessa situação o programador não tem como debugar o código e muitas vezes não consegue reproduzir a situação em um ambiente de testes porque não tem como saber de fato qual foi o cenário ocorrido.

Quando isso acontece é muito importante que se tenha disponível toda informação possível sobre aquela execução. E a melhor maneira de conseguir isso é através de **Logs**. Pois eles são o rastro da execução da aplicação e podem ser tão detalhados quanto o programador desejar.

## Logs simples com Winston
Uma api bem simples, mas bastante eficaz para o uso de logs é a winston. Ela foi projetada para ser uma API de logs simples e universal com suporte para múltiplas camadas de logs. É possível que cada instância do winston tenha múltiplas camadas de logs e diferentes níveis em cada uma dessas camadas.

Ela também desacopla bastante a sua implementação interna de escrita dos logs das interfaces que são expostas para o programador. Isso facilita muito a vida do programador e é algo que muitas APIs de log acabam não fazendo.

Vejamos um exemplo básico passo a passo de uso do winston para entender melhor os conceitos. O primeiro passo é obviamente instalar a lib através do npm e em seguida carregá-la no arquivo desejado:

Primeiro instale os pacotes que auxiliarão o nosso trabalho com os logs: winston e morgan:
```bash
npm install --save winston morgan
```

```js
const winston = require('winston');
const logger = new winston.Logger({
    transports: [
        new winston.transports.File({
            level: "info",
            filename: "logs/sample.log",
            maxsize: 1048576,
            maxFiles: 10,
            colorize: false
        });
    ]
});
```

## Logando as requisições com Morgan
Claro que a ideia principal do uso dos logs é que eles possam ficar localizados nas partes mais críticas dos sistemas para que se tenha as informações detalhadas de cada execução. Uma forma de fazer isso, seria escrevendo uma camada do **winston** para cada rota criada no sistema.

Mas essa opção obviamente seria mais trabalhosa que o necessário e teríamos que espalhar código repetido e difícil de manter por todo o projeto. Uma maneira mais elegante de fazer essa implementação seria interceptando todas as requisições em um ponto único do código.

Como o **express** é quem coordena as requisições, o seu arquivo de configurações *custom-express.js* parece ser um forte candidato para receber este código. E de fato, já existe uma lib cujo objetivo é exatamente esse: o **morgan**, que é um middleware escritor de logs HTTP para Node.js.

Após instalado na aplicação via npm, o **morgan** precisa ser definido como um novo middleware do express. Essa implementação deve ser feita no *custom-express.js*. O primeiro passo é fazer o *require* da lib:

```js
...
const morgan = require('morgan');
const logger = require('../persistencia/logger.js');
...
```

Um detalhe importante é que **morgan** é basicamente um middleware mesmo, ou seja, a especialidade dele é saber se integrar corretamente com o **express**. Mas ele não é um especialista em escrever os logs em si. Por esse motivo é que foi carregado também o arquivo *persistencia/logger.js*, que contém as implementação do **winston**. A ideia então é aproveitar aquilo que o **winston** faz de melhor para que seja aproveitado pelo **morgan**. Um belo exemplo de reuso de código.

Em seguida, deve ser feita de fato a adição do morgan como um novo middleware do express:

```js
...
module.exports = function() {
    const app = express();

    app.use(morgan("common", {
        stream: {
            write: function(message){
                logger.info(message)
            }
        }
    }));
...
```
