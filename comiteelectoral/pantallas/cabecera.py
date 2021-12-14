import webbrowser
import time

nombre ="german" 
html_content = f"<html><body> Nombre: {nombre} </body></html>"

with open("ccc.html","w") as html_file:
    html_file.write(html_content)
