build:
	echo "building decrypt"
	docker build -t decrypt .

start:
	echo "starting decrypt"
	./runContainer.sh;

stop:
	echo "stopping decrypt"
	docker container rm -f decrypt

shell:
	docker run -it decrypt bash

clean:
	echo "cleaning decrypt"
	rm -rf ~/decrypt; docker image rm -f decrypt

restart:
		echo "restarting decrypt"
		docker container rm -f decrypt && \
			./runContainer.sh;