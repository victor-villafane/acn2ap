# Guía de Git - Primer push a GitHub

## 1. Inicializar el repositorio
```bash
git init
```

## 2. Configurar identidad
```bash
git config --global user.email "tu@email.com"
git config --global user.name "tu-usuario"
```

## 3. Conectar con GitHub
```bash
git remote add origin https://github.com/usuario/repositorio.git
```

## 4. Primer commit y push
```bash
git add .
git commit -m "init"
git push -u origin main
```

> La flag `-u` vincula la rama local con la remota. Los siguientes push ya solo necesitan `git push`.

## Flujo para cambios posteriores
```bash
git add .
git commit -m "descripción del cambio"
git push
```

https://www.freecodecamp.org/espanol/news/aprende-git-y-github-curso-desde-cero/