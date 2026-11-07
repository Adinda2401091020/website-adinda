# RuangKita — Landing Page Login

Landing page responsive dengan form login dan register sebagai demo antarmuka. Formulir belum terhubung ke backend dan tidak menyimpan atau memverifikasi akun.

## Jalankan di komputer lokal

Pastikan Docker Desktop sudah berjalan, lalu dari folder proyek jalankan:

```powershell
docker compose up -d --build
```

Buka <http://localhost:8085>. Untuk menghentikan container:

```powershell
docker compose down
```

## Build dan upload image ke Docker Hub

Ganti `USERNAME_DOCKERHUB` dengan username Docker Hub milikmu. Pastikan sudah login dengan `docker login`.

```powershell
docker build -t USERNAME_DOCKERHUB/landing-page-login-adinda:latest .
docker push USERNAME_DOCKERHUB/landing-page-login-adinda:latest
```

## Pull dan jalankan image dari Docker Hub

```powershell
docker pull USERNAME_DOCKERHUB/landing-page-login-adinda:latest
docker run -d --name landing-page-login -p 8085:80 USERNAME_DOCKERHUB/landing-page-login-adinda:latest
```

Buka <http://localhost:8085>. Untuk menghentikan dan menghapus container:

```powershell
docker stop landing-page-login
docker rm landing-page-login
```
