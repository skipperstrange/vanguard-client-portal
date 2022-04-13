const url = $ (location).attr ("origin");
const appPath = $(location).attr ("pathname")
let domain = (new URL(url));

const apiUrls = {
    applicationServerUrl: "http://192.168.100.242:8000/api/",
    motorProposalUrl:  "?controller=motor-policy&view=blank",
    motorProposalSummaryUrl : "?controller=motor-policy-summary",
    fireClaimSummaryUrl : "?controller=fire-summary",
    motorClaimSummaryUrl : "?controller=motor-claim-summary"


}