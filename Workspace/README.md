# Workspace

O workspace é o diretório incluido na variável de ambiente GOPATH, em alguns casos o GOPATH já
vem direcionado por padrão para o mesmo diretório da GOROOT, no caso o bin da linguagem.

A linguagem de programação Go nos dá diretrizes sobre como organizar as pastas no **workspace**.

O Workspace padrão do Go é um diretório chamado /go que fica na pasta do seu usuário em seu sistema operacional.
No Windows esta pasta normalmente se encontra em C:/Users/seu-usuario/, e nos sistemas Unix (MacOS e distribuições do Linux)
normalmente se encontra em /home/seu-usuario/.

**bin** - Contém os arquivos compilados

**pkg** - Contém os pacotes compartilhados dentro da aplicação - Go é uma linguagem modular e possui alta dependencia de pacotes.

**src** - Contém os códigos fontes de projetos Go ou demais linguagens
