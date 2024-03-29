const url = $ (location).attr ("origin");
const appPath = $(location).attr ("pathname")
let domain = (new URL(url));

const apiUrls = {
    applicationServerUrl: "http://localhost/api-official/public/api/",
    motorProposalUrl:  "?controller=motor-policy&view=blank",
    motorProposalProcessUrl:  '?controller=process-motor-policy',
    motorProposalSummaryUrl : "?controller=motor-policy-summary",
    fireClaimSummaryUrl : "?controller=fire-summary",
    motorClaimSummaryUrl : "?controller=motor-claim-summary",
    motorClaimUrl:  "?controller=motor-claim&view=blank",
    motorClaimProcessUrl:  '?controller=process-motor-claim',


}