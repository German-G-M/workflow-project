"""workflowdjango URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.0/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
#from django.contrib import admin #este import es para trabajar con el path admin
from django.urls import path
from comiteelectoral import views # importamos las vistas desde nuestra carpeta 'comiteelectoral'

urlpatterns = [
    #path('admin/', admin.site.urls),#este 'path' me lleva a un login y password
    path('qwerty', views.inicio),
    #path('login',views.index), #le pongo el nombre login para que 
    path('',views.index, name='inicio'), #la primera parte en vacío paraa que sea lo primero que me muestre. para redireccionar puedo usar el nombre en lugar de la ruta
    path('cab',views.cabecera, name='head'), #se puede hacer el llamado por: 1) la url 'cab'(la ruta) o 2) el nombre 'head'
    path('cabe',views.cabecera2),

    path('bandeja', views.mibandeja),
]
