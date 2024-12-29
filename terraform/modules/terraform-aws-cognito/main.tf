resource "aws_cognito_user_pool" "pool" {
  name                     = "Lab user pool"
  auto_verified_attributes = ["email"]
  deletion_protection      = "ACTIVE"
  username_attributes      = ["email"]
  username_configuration {
    case_sensitive = false
  }
}
