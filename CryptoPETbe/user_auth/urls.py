from django.urls import path
from . import views

app_name = 'userauth' #Тут баг!!!

urlpatterns = [
    path('userauth', views.index, name = 'userauth')
    ]