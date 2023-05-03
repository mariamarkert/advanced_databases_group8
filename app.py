import subprocess

# Define the command to start Apache server
command = "sudo service httpd start"

# Run the command using subprocess
process = subprocess.Popen(command, shell=True, stdout=subprocess.PIPE, stderr=subprocess.PIPE)

# Wait for the process to complete and capture the output
output, error = process.communicate()

# Check if there were any errors
if process.returncode != 0:
    print("Failed to start Apache server:")
    print(error.decode('utf-8'))
else:
    print("Apache server started successfully.")
