source ./.env

SYMFONY_CONTAINER_NAME=${SYMFONY_APP_CONTAINER_NAME}

docker-compose up -d --build

SYMFONY_CONTAINER_TARGET_FOLDER_PATH=${SYMFONY_APP_TARGET_VOLUME}

#set all permissions for app folder
docker exec -it "$SYMFONY_CONTAINER_NAME" chmod 777 "$SYMFONY_CONTAINER_TARGET_FOLDER_PATH"

# composer install
docker exec -it "$SYMFONY_CONTAINER_NAME" composer install
