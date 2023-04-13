import http.server
import socketserver
import sqlite3

# Set up a basic HTTP server to serve the login page
PORT = 8000
Handler = http.server.SimpleHTTPRequestHandler
httpd = socketserver.TCPServer(("", PORT), Handler)

# Connect to the SQLite database
conn = sqlite3.connect('users.db')
c = conn.cursor()

# Create a table to store user information
c.execute('''CREATE TABLE IF NOT EXISTS users
             (username text, password text)''')

# Serve the login page
print(f"Serving at http://localhost:{PORT}/login.html")
httpd.serve_forever()
