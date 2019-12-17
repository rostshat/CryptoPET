from django.shortcuts import render
from django.http import HttpResponse
from .models import Accs

def RegAndLogin(request):
    if request.method == "POST":
        if request.REGISTER.get('regpass') == request.REGISTER.get('regpassv'):
            accs = Accs()
            accs.login = request.REGISTER.get('reglogin')
            accs.password = request.REGISTER.get('regpass')
            accs.save()

            html = "<html><body>Registration sucsessful!</body></html>"
            return HttpResponse(html)

        else:
            pass