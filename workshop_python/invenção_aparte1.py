# Mostrar todos os números primos dentro de um intervalo fechado
# teste
def teste(inicio,fim):
  while inicio <= fim:
    v = 2
    primo = 's'
    while v<inicio:
      if inicio%v==0:
        primo='n'
        break
      v += 1
    if primo=='s':
      print(inicio,end=' ')
    inicio+=1
# entrada
inicio,fim = input().split()
inicio = int(inicio)
fim = int(fim)
# tratamento da entrada
while fim < inicio:
  inicio,fim = input().split()
  inicio = int(inicio)
  fim = int(fim)
else:
  teste(inicio,fim)