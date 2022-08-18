# Escalabilidade e Clusters

## Escalabilidade
Esse é um problema com o qual todos queremos nos preocupar, pois significa que o sistema está tendo bastante acesso e está ganhando escala. A principal atitude que devemos ter nesse momento é verificar e implementar as estratégias disponível para escalar bem a aplicação de acordo com as limitações que temos de software e hardware.

## Cluster
Com relação ao software, sabemos que não é possível utilizar mais de uma thread, no Node. O que é bastante criticado por muitas pessoas, porém este não é necessariamente um problema tão grave para ele, visto que ele consegue escalonar seus processos com uma velocidade realmente muito boa, mesmo utilizando somente uma thread.

Além disso, o fato de não poder ter mais de uma thread não é impeditivo para que se crie um **cluster** para uma aplicação Node. Na verdade, o Node até já vem com uma lib nativa em seu core especialista no assunto: o módulo **cluster**.

Ao utilizarmos esse módulo, ele basicamente instancia novos processos de uma aplicação, trabalhando de forma distribuída e, quando trabalhamos com uma aplicação web, esse módulo se encarrega de compartilhar a mesma porta da rede entre os clusters ativos. O número de processos a serem criados é determinado pelo programador, e é claro que a boa prática é instanciar um total de processos relativo à quantidade de núcleos do processador do servidor, ou também uma quantidade relativa a núcleos X processadores.

Por exemplo, se a máquina possui apenas um processador de 4 núcleos, então é possível instanciar 4 processos, criando assim uma rede com 4 nós. Mas caso tenha 4 processadores de 4 núcleos cada, então é possível criar 16 processos, tendo assim uma rede com 16 nós ativos.

Para garantir que os clusters trabalhem de forma organizada e distribuida é preciso que haja um *cluster master*. Ele é o processo pai, a partir do qual todos os outros são criados e é responsável por balancear a carga entre os filhos, que são conhecidos como *cluster slaves*.

Uma grande vantagem de implementar esse tipo de arquitetura no Node é que toda a parte de criação dos *clusters* e distribuição dos processos fica muito bem abstraida, tornando a implementação bastante simples. Outra é que a execução dos clusters é independente, o que significa que se um deles cair, os outros continuam a executar normalmente. Porém a capacidade de tentar trazer de volta à ativa esse cluster perdido, essa sim precisa ser feita manualmente.