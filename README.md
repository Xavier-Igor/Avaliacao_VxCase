# Avaliação VX CASE - BACKEND
  
## Deploy

 1. Clone este repositório  
 ` git clone https://github.com/Xavier-Igor/Avaliacao_VxCase.git`  
 `cd Avaliacao_VxCase`  
 2. Configure o ambiente:  
 `cp .env.example .env`  
 Setar variável `DB_HOST` do arquivo `.env` seja setada com `db`.
 3. Compile a imagem:  
 `docker-compose build app`  
 4. Execute o ambiente:  
 `docker-compose up -d`
 5. Instale as dependências:  
 `docker-compose exec app composer install`
 6. Gere uma key:  
 `docker-compose exec app php artisan key:generate`
 8. Populando banco de dados    
 `docker-compose exec app php artisan migrate --seed`  
 7. Acesse o servidor  
 `localhost:8000`  


# Resolução dos desafios

- **Organizar os Models em uma pasta (Nível Básico)**  

    Todas as Models foram movidas para `app/Models/`.

- **Implementar FormRequest nos Controllers (Nível Básico)** 

- **Implementar FormRequest nos Controllers (Nível Básico)**   

- **Criar um command para inserir um produto via terminal (Nível Intermediário)**  

	Exemplo: `docker-compose exec app php artisan product:create "Cabo USB"`.

- **Adicionar Docker ao projeto (Nível Intermediário)**  

    Passo a Passo na sessão acima.

- **Criar uma Job (Nível Avançado)**  
    Para Utilização deste recurso, informar URL valida na variavel SLACK_NOTIFICATION_URL no arquivo .env

    Exemplo: `SLACK_NOTIFICATION_URL=https://hooks.slack.com/services/...`.
    
    Executando tarefa `docker-compose exec app php artisan schedule:run`.
    
# Autor: IGOR XAVIER
