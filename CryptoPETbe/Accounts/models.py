from django.db import models

class Accs(models.Model):
    login = models.CharField(max_length=20)
    password = models.CharField(max_length=50)
    USD = models.FloatField()
    BTC = models.FloatField()
