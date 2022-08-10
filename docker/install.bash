#!/bin/bash

# Update Drivers
sudo apt-get update

# Basic Packages
sudo apt-get install curl build-essential apt-transport-https lsb-release ca-certificates gnupg software-properties-common wget gpg -y

# Install Docker and Docker-compose
if ! command -v docker &> /dev/null;
then
    #
    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg
    #
    echo \
    "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu \
    focal stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
    #
    sudo apt-get update
    #
    sudo apt-get install docker-ce docker-compose -y
    #
    sudo usermod -aG docker ${USER}
    #
    sudo chmod 666 /var/run/docker.sock
fi

# Install Google Chorme
if ! command -v google-chrome &> /dev/null;
then
    # 
    wget https://dl.google.com/linux/direct/google-chrome-stable_current_$(dpkg --print-architecture).deb
    # 
    sudo dpkg -i google-chrome-stable_current_$(dpkg --print-architecture).deb
    # 
    sudo apt-get install -f -y
    # 
    sudo rm google-chrome-stable_current_$(dpkg --print-architecture).deb
fi