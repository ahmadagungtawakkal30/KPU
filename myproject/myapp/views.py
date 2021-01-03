from django.core.mail import send_mail
from django.http import HttpResponse, JsonResponse
from django.shortcuts import render
import json
import random2 as random
import string
from myapp.forms import AddUser


def index(request):
    return render(request, 'send/index.php')


def users(request):
    form = AddUser()
    if request.method == "POST":
        form = AddUser(request.POST)

        if form.is_valid():
            form.save(commit=True)
            return index(request)
        else:
            print("ERROR FROM INVALID")
    return render(request, 'send/user.php', {'form': form})


def reads(request):
    opendata = open(
        'D:/SEMESTER 5/KPU/KPU/myproject/myapp/templates/send/users.json')
    data = json.load(opendata)
    context = {'user': data}
    return render(request, 'form/index.php', context)


def sendEmail(request, email, npm, nama):
    letters_and_digits = string.ascii_letters + string.digits
    r_result = ''.join((random.choice(letters_and_digits)
                        for i in range(10)))
    message = 'Hi, ' + nama
    message1 = '\r\nKami dari KPU mengundang anda untuk melakukan pemilu silahkan klik link berikut : '
    link = 'https://docs.djangoproject.com '
    user = '\r\nAkun\r\n     User : ' + npm
    message2 = '\r\n     Password : ' + r_result
    password = (message+message1+link+user+message2)
    send_mail('Pemilihan umum ketua HMJ dan PRESMA 2021',
              password,
              'ahmadagungt30@gmail.com',
              [email],
              fail_silently=False)
    sendpass = {'showpass': r_result}
    return render(request, 'form/result.php', sendpass)
