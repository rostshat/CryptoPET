from django.shortcuts import render
from django.http import HttpResponse

def auth(request):
    return HttpResponse("This is authorisation page")
