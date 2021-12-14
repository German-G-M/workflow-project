from django.db import models

# Create your models here.

from django.db import connections

class usuariosRegistrados(models.Model):
    usuario=models.CharField(max_length=100)
    contrasenia=models.CharField(max_length=100)
    rol=models.CharField(max_length=100)
    class Meta:
        db_table="usuarios" # aqui pongo el nombre de la tabla que vy a usar

