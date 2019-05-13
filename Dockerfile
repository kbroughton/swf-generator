FROM openjdk:7u211-jdk-jessie

RUN mkdir /opt/flex && \
    cd /opt/flex/ && \
    wget http://download.macromedia.com/pub/flex/sdk/flex_sdk_4.6.zip && \
    unzip flex_sdk_4.6.zip && \
    chmod -R a+rx /opt/flex/ && \
    echo 'export PATH=/opt/flex/bin:$PATH' >> ~/.bashrc && \
    chmod 755 bin/mxmlc

RUN wget https://www.apachefriends.org/xampp-files/7.3.5/xampp-linux-x64-7.3.5-0-installer.run && \
    chmod a+x xampp-linux-x64-7.3.5-0-installer.run

RUN  echo yes | ./xampp-linux-x64-7.3.5-0-installer.run --unattendedmodeui none 

RUN cd /opt && git clone https://github.com/kbroughton/swf-generator.git && \
    cp -R swf-generator /opt/lampp/htdocs && \
    cp /opt/lampp/htdocs/swf-generator/index.php /opt/lampp/htdocs/
    
RUN cd /opt && git clone https://github.com/appsecco/json-flash-csrf-poc.git && \
    cd json-flash-csrf-poc

RUN cp --recursive /opt/swf-generator/* /opt/lampp/htdocs

COPY run.sh .

RUN apt update && apt install net-tools
CMD ./run.sh

#TEMPLATE_FILE=/opt/json-flash-csrf-poc/csrf.as
#sed  "s/attacker-ip/$ATTACKER_HOST/" $TEMPLATE_FILE > /tmp/csrf.as

