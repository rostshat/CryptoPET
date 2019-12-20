from django.shortcuts import render
from django.http import HttpResponse
from .models import Accs

def RegAndLogin(request):
    if request.method == "POST":
        if request.POST.get('regpass') and request.POST.get('regpassv'): #==
            if request.POST.get('regpass') == request.POST.get('regpassv'):
                login = request.POST.get('reglogin')
                if Accs.objects.filter(login=login).exists():
                    return HttpResponse('Error!')
                else:
                    accs = Accs()
                    accs.login = request.POST.get('reglogin')
                    accs.password = request.POST.get('regpass')
                    accs.USD = 0
                    accs.BTC = 0
                    accs.save()

                    return HttpResponse('Registration sucsessful!')
            else:
                return HttpResponse('Error!')
            

        elif request.POST.get('loginlogin') and request.POST.get('loginpass'):
                login = request.POST.get('loginlogin')
                password = request.POST.get('loginpass')
                if Accs.objects.filter(login=login).exists() and Accs.objects.filter(password=password).exists():
                    HttpResponse("Authorisation sucsessful!")
        
        else:
            return HttpResponse('Error!')
        