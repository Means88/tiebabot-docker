import time
import os

last_time = time.time()
while True:
    if time.time()-last_time > 30:
        last_time = time.time()
        os.system('curl http://localhost/cron.php')