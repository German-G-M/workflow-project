from django.shortcuts import render
from comiteelectoral.models import usuariosRegistrados

# Create your views here.
def inicio(request):
    return render (request,'inicio.html')

def index(request):
    return render (request,'index.html')

def cabecera (request):
    contrasena =request.GET.get('contrasenia') #obtengo lo que se envió desde el login
    usuario=request.GET.get('usuario')

    return render(request,'cabecera.html',{'user':usuario,'contrasenia':contrasena})#aqui le pasamos la variable usuario y contrasenia html

def mibandeja (request): #aqui debería controlar en vez del controlindex.php 
    contr =request.GET.get('contrasenia') #obtengo lo que se envió desde el login y lo comparo con la BD
    usuar=request.GET.get('usuario')

    #mostrarresultado=usuariosRegistrados.objects.all()
    #mostrarresultado=usuariosRegistrados.objects.filter(usuario=usuar, contrasenia=contr) #obtengo los elresultado de la base de datos
    #mostrarresultado.usuario
    #mostrarresultado.contrasenia
    #print(mostrarresultado)
    return render(request,'bandeja.html',{'user':usuar,'contrasenia':contr})

    """
    print (mostrarresultado)
    pp=mostrarresultado.fetchone()
    print (pp.usario)
    print (pp.contrasenia)
    for dato in mostrarresultado:

        if  (usuario==dato.usuario and contrasena == dato.contrasenia): #si son iguales se envía a la bandeja
            #se va a la bandeja
            return render(request,'bandeja.html',{'user':usuario,'contrasenia':contrasena})
        else:
            #se va al inicio (o no hace nada)
            return render (request,'index.html')
"""

def cabecera2 (request):
    return render (request,'cabecera.py')


