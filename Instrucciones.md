El primer y unico paso en este caso (creo) es hacer

composer require dedoc/scramble

Lo otro que se ocupa pero no se la razon es:

php artisan vendor:publish --provider="Dedoc\Scramble\ScrambleServiceProvider" --tag="scramble-config"

Por ultimo y no menos importante, para la seguridad esta en 

AppServiceProvider

Donde en el metodo de boot SI O SI se tiene que poner ese metodo para habilitar la autenticacion con tokens en Scramble
Caso contrario, Scramble solo te deja como espectador viendo las APIs sin interactuar
(Validar dato porque esto fue escrito de memoria  a las 2:39 AM)

El endpoint para consultar a Scramble es: https://localhost:8000/docs/api
