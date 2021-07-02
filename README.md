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


# Issues Propostas

 - **Organizar os Models em uma pasta (Nível Básico)** heavy_check_mark  

- **Implementar FormRequest nos Controllers (Nível Básico)** 

- **Implementar FormRequest nos Controllers (Nível Básico)**   

- **Criar um command para inserir um produto via terminal (Nível Intermediário)**  

- **Adicionar Docker ao projeto (Nível Intermediário)**  

- **Criar uma Job (Nível Avançado)** 




    
# Autor: IGOR XAVIER
