# Requerimientos

- Docker
- Docker compose

## Instrucciones

1. Clonar repositorio
   ```bash
   git clone https://github.com/bvelastegui/polimundo-backend
   ```
2. Ejecutar docker compose
   ```bash
   docker compose up -d
   ```
3. Ejecutar las migraciones
   ```bash
   docker compose exec laravel artisan migrate -n
   ```
4. Acceder a [http://localhost:8000]()

# Tareas del reto

### Indicaciones generales:
- [x] Crea un repositorio en github
- [ ] Intenta agrupar funcionalidades en commits individuales, perderás puntos si creas commits grandes sin relación.

### Puntos extras:
- [x] Te daremos puntos extras si realizas el challenge a través de docker, es decir, que las herramientas de desarrollo se encuentren en el docker, NO en tú máquina (php, node, etc... NO nos referimos al IDE). Puedes usar docker directo, o cualquier herramienta que use docker como núcleo.
 
### Challenge Back-end
- [x] Descarga la última version de Laravel
- [ ] Crea migraciones, seeders y modelos, para 2 tablas, cada una con 3 columnas (sin contar el ID, y los 2 timestamps)
- [ ] Crea 2 endpoints de API para cada tabla, el 1ero para toda la colección (todos los datos); eje: api/persona, el 2do para el recurso (un registro en especifico, via su ID); eje: api/persona/1.
