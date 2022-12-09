FROM node:16

WORKDIR /usr/src/app
COPY package*.json ./

RUN npm install


COPY . .

EXPOSE 3000
ENTRYPOINT [ "npm", "start" ]
CMD [ "php", "-s", "0.0.0.0:3000" ]
