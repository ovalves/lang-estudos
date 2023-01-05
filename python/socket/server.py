import socket
import time

HOST = 'localhost'
PORT = 4000

s = socket.socket()
s.bind((HOST, PORT))
print(f"Aguardando conexão na porta: {PORT}")

s.listen(5)
conn, address = s.accept()

print(f"Recebendo solicitação de {address}")

messages = [
    'Message 1',
    'Message 2',
    'Message 3',
    'Message 4',
    'Message 5',
]

for message in messages:
    message = bytes(message, 'utf-8')
    conn.send(message)
    time.sleep(1)

conn.close()
