resource "aws_cognito_user_pool" "pool" {
  name                = "Lab user pool"
  alias_attributes    = "email"
  deletion_protection = "ACTIVE"
}
