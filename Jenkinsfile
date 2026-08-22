pipeline {
    agent any

    stages {
      
        stage('Checkout') {
            steps {
                echo "check scm"
            }
        }
        stage('Build') {
            steps {
                echo 'Building the project...'
            }
        }

        stage('Test') {
            steps {
                echo 'Testing the project...'
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deploying the project...'
            }
        }
    }
}
