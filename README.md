# Government Tracker

Acest proiect este o aplicație web realizată în Laravel, destinată urmăririi activității Președintelui și Guvernului României.

## Funcționalități de bază

-   Postări publicate de administratori despre activitatea instituțiilor
-   Voturi pozitive/negative de la utilizatori
-   Comentarii și discuții sub fiecare postare
-   Autentificare utilizatori (login/înregistrare)
-   Testare unitară pentru funcționalități

## Instalare locală

### 1. Clonează proiectul

```bash
git clone https://github.com/RoTak00/govt-tracker.git
cd govt-tracker
```

### 2. Instalează dependențele

```bash
composer install
npm install && npm run dev
```

### 3. Copiază fișierul `.env.example`

```bash
cp .env.example .env
```

### 4. Setează datele pentru baza de date în fișierul `.env`

### 5. Generează cheia aplicației

```bash
php artisan key:generate
```

### 6. Rulează migrațiile

```bash
php artisan migrate
```

### 7. Pornește serverul de dezvoltare

```bash
php artisan serve
```

### 8. Rulează Vite pentru stiluri/js

```bash
npm run dev
```

### 9. Rulează testele unitare

```bash
php artisan test
```

## Autori

-   Takacs Robert
