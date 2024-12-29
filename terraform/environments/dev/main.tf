resource "terraform_data" "echo" {
  triggers_replace = [timestamp()]

  provisioner "local-exec" {
    command = "echo ${timestamp()}"
  }
}
