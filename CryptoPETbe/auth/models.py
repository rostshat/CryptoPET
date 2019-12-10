from django.db import models

#МИГРАЦИЯ НЕ СДЕЛАНА

class Users(models.Model):
    name = models.CharField(max_length=20)
    password = models.CharField()
    email = models.CharField()
    balance = models.IntegerField()