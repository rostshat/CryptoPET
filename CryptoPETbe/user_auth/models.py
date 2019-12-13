from django.db import models

class user_acc(models.Model):
    firstname = models.CharField(max_length=20)
    lastname = models.CharField(max_length=20)
    password = models.CharField(max_length=200)
    balance = models.FloatField()