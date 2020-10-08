build:
	docker build -t decrypt .

start:
	./runContainer.sh;

stop:
	docker container rm -f decrypt

shell:
	docker run -it decrypt bash

clean:
	docker container rm -f decrypt; docker image rm -f decrypt

restart:
		echo "restarting decrypt"
		docker container rm -f decrypt && \
			./runContainer.sh;

reboot:
	docker container rm -f decrypt && \
	docker image rm -f decrypt && \
	docker build -t decrypt . && \
	./runContainer.sh
