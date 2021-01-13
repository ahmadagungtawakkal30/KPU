from django.db import models


class Prodi(models.Model):
    kode_prodi = models.CharField(primary_key=True, max_length=20, unique=True)
    nama_prodi = models.CharField(max_length=50)


class Users(models.Model):
    npm = models.CharField(primary_key=True, max_length=20, unique=True)
    nama = models.CharField(max_length=50)
    password = models.CharField(max_length=20)
    email = models.EmailField(max_length=50, unique=True)
    tingkat = models.CharField(max_length=5)
    kelas = models.CharField(max_length=10)
    headphone = models.CharField(max_length=20)
    aktivasi = models.BooleanField(default=False)
    prodi_user = models.ForeignKey(Prodi, on_delete=models.CASCADE)


class Presma(models.Model):
    nama_ketua = models.CharField(max_length=50)
    nama_wakil = models.CharField(max_length=50)
    gambar_ketua = models.ImageField(null=True, blank=True,)
    gambar_wakil = models.ImageField(null=True, blank=True,)
    motto = models.CharField(max_length=300)


class Hmj(models.Model):
    nama_ketua = models.CharField(max_length=50)
    gambar_ketua = models.ImageField(null=True, blank=True,)
    motto = models.CharField(max_length=300)
    prodi_hmj = models.ForeignKey(Prodi, on_delete=models.CASCADE)


class Suara(models.Model):
    npm_user = models.ForeignKey(Users, on_delete=models.CASCADE)
    id_presma = models.ForeignKey(Presma, on_delete=models.CASCADE)
    id_Hmj = models.ForeignKey(Hmj, on_delete=models.CASCADE)
    created = models.DateTimeField(auto_now_add=True, auto_created=True,)
