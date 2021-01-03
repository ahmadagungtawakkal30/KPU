from django.db import models


class Prodi(models.Model):
    kode_prodi = models.IntegerField(primary_key=True)
    nama_prodi = models.CharField(max_length=50)


class Users(models.Model):
    npm = models.IntegerField(primary_key=True)
    nama = models.CharField(max_length=50)
    password = models.CharField(max_length=20)
    email = models.EmailField(max_length=50, unique=True)
    prodi_user = models.ForeignKey(Prodi, on_delete=models.CASCADE)


class Presma(models.Model):
    nama_ketua = models.CharField(max_length=50)
    nama_wakil = models.CharField(max_length=50)
    # gambar_ketua = models.ImageField()
    # gambar_wakil = models.ImageField()
    motto = models.CharField(max_length=300)


class Hmj(models.Model):
    nama_ketua = models.CharField(max_length=50)
    # gambar_ketua = models.ImageField()
    motto = models.CharField(max_length=300)
    prodi_hmj = models.ForeignKey(Prodi, on_delete=models.CASCADE)


class Suara(models.Model):
    npm_user = models.ForeignKey(Users, on_delete=models.CASCADE)
    id_presma = models.ForeignKey(Presma, on_delete=models.CASCADE)
    id_Hmj = models.ForeignKey(Hmj, on_delete=models.CASCADE)
    created = models.DateTimeField(auto_now_add=True)
