from django.shortcuts import render
from django.http import HttpResponse
from .models import Accs

def RegAndLogin(request):
    if request.method == "POST":
        if request.POST.get('regpass') and request.POST.get('regpassv'): #==
            if request.POST.get('regpass') == request.POST.get('regpassv'):
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
                accs = Accs()
                if accs.objects.get(login=request.POST.get('loginlogin')) == request.POST.get('loginlogin') and accs.objects.get(login=request.POST.get('loginpass')) == request.POST.get('loginpass'):
                    HttpResponse("Authorisation sucsessful!")
        
        else:
            return HttpResponse('Error!')
        