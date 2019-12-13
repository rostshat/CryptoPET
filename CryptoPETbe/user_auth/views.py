#from django.shortcuts import render

from django.http import HttpResponse

def index(request):
    return HttpResponse("This is a test page!")

# def userauth(request):
#     html = "<html><body>It is test page.</body></html>"
#     return HttpResponse(html)