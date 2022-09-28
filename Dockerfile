FROM node:alpine

ENV NODE_VERSION 18.9.1



WORKDIR /user/app

COPY package.json ./

RUN npm install

COPY . .

EXPOSE 3333

CMD ['cd' './node_modules/grunt/bin/grunt']
CMD ['Build-All']


