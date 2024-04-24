<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Git e Github</title>
</head>
<body>
    <!--
        * GIT - Sistema que controla alterações dentro de um arquivo
        * Github - é um servidor de Git

        1. Abra o Terminal
        2. Verifique se o Git está instalado na sua máquina 
            - git --version
        3. Configure o Git para que o Github possa encontrar seu perfil 
            - git config --global user.name "seu perfil no github"
            - git config --global user.email "seu e-mail do github"
        4. Agora vamos instalar o git no projeto
            - git init (cria uma pasta oculta chamada .git onde terá arquivos do git e suas versões)
        5. Agora precisamos colocar todos os arquivos do projeto no controle de versão
            - git add . ou  git add nome do arquivo
            - git commit -m "Primeiro Commit" (ponto de marcação para voltar na versão)
        6. No Git Hub vamos criar um repositório, onde o projeto ficará guardado
            - Abra seu Github, crie um novo repositório, dê o mesmo nome da pasta que está no seu servidor local
            - o Github irá te indicar um conjunto de comandos para criar o repositório e conectá-lo ao seu servidor local:
                git branch -M main
                git remote add origin https://github.com/jesantanappg/aula-git.git
                git push -u origin main
        7. Depois é só autorizar o Github usando seu login e senha na tela do Github
        8. A partir disso a interface do VS Code para a ficar amigável com o Github possibilitando a partir de cliques a conexão com o servidor de Git
    
        Caso eu não estaja mais no laboratório e queira conectar com o mesmo projeto em casa, como eu faria?
        1. Abra um novo terminal
        2. Acesse à pasta do servidor local e htdocs
            - cd
            - cd . Xampp
            - cd . htdocs
        3. crie um clone do git na pasta localhost
            - git clone https:/github.com/... (endereço da pasta)
            - dir para confirmar a conexão
    --> 

</body>
</html>