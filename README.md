# Avaliação VX CASE - BACKEND
  
## Deploy

 1. Clone este repositório :arrow_down:	
 ` git clone https://github.com/Xavier-Igor/Avaliacao_VxCase.git`  
 `cd Avaliacao_VxCase`  
 2. Configure o ambiente: :arrow_down:	
 `cp .env.example .env`  
 :warning: Setar variável `DB_HOST` do arquivo `.env` seja setada com `db`. :warning:	
 3. Compile a imagem: :arrow_down:	
 `docker-compose build app`  
 4. Execute o ambiente: :arrow_down:	  
 `docker-compose up -d`
 5. Instale as dependências: :arrow_down:	  
 `docker-compose exec app composer install`
 6. Gere uma key: :arrow_down:	 
 `docker-compose exec app php artisan key:generate`
 8. Populando banco de dados: :arrow_down:	   
 `docker-compose exec app php artisan migrate --seed`  
 7. Projeto servido na url: :green_circle:	
 `127.0.0.1:8000`  


# Issues Propostas

- 1# **Organizar os Models em uma pasta (Nível Básico)** :heavy_check_mark:

- 2# **Implementar FormRequest nos Controllers (Nível Básico)** :heavy_check_mark:

- 3# **Implementar FormRequest nos Controllers (Nível Básico)** :heavy_check_mark:

- 4# **Criar um command para inserir um produto via terminal (Nível Intermediário)** :heavy_check_mark: 

- 5# **Adicionar Docker ao projeto (Nível Intermediário)** :heavy_check_mark:

- 6# **Criar uma Job (Nível Avançado)** :heavy_check_mark:

##


    
# Autor: IGOR XAVIER
